<?php defined('BASEPATH') OR exit('No direct script access allowed');
require FCPATH. 'application/libraries/dompdf/autoload.inc.php';
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('id')){
            return redirect('login');
        }
        $this->load->model('user_model');
    }
    public function index(){
        $data['user_details'] = $this->user_model->getuserdetails();
        $data['requests'] = $this->user_model->getrequest();
        $data['title']="Requests";
        $this->load->view('header', $data);
        $this->load->view('user/requests', $data);
        $this->load->view('footer');
    }
    
    public function payment($id){
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="text text-danger">', '</div>');
        $this->form_validation->set_rules('card_number','Card Number','required');
        $this->form_validation->set_rules('name','Name on Card','required');
        $this->form_validation->set_rules('expiry','Expiry','required');
        $this->form_validation->set_rules('cvv','CVV','required');
        if($this->form_validation->run()){
            $post = $this->input->post();            
            if($this->user_model->update_user_id($id,$this->session->userdata('id'))){
                return redirect('user/query/'.$id);
            }
           
        }
        else{
            $cart = $this->user_model->cart($id);
            foreach($cart as $cart){
                $data['package'] = $this->user_model->package_details($cart->package_id); 
            }
            $data['user_details'] = $this->user_model->getuserdetails();            
            $data['title']="Payment Methods";
            $data['id'] = $id;
            $this->load->view('header', $data);
            $this->load->view('user/payment', $data);
            $this->load->view('footer');
        }
    }
    public function query($id){
        $query = $this->user_model->getlastquery($id);
        


        foreach($query as $q){
            $age = $q->age; 
            $gender = $q->gender;
            $height = $q->height;
            $height_unit = $q->height_unit;       
            $weight = $q->weight; 
            $weight_unit = $q->weight_unit;
            $health = $q->health_status; 
            $activity = $q->activity_level; 
            $food = $q->food_preferences;
            $food_details = $q->food_preference_details;   
            $cooking = $q->cooking_skills;   
            $budget = $q->budget;
        }        
       
        
        // Generated @ codebeautify.org

        $ch = curl_init();
        
        $question = "You will be acting as an expert in nutrition and healthy eating habits. Your mission is to generate list of daily diet plan for each week and a shopping list according to it.
        My age is ".$age."
        My Gender is ".$gender."
        My height ".$height. $height_unit."
        My weight is ".$weight.$weight_unit."
        My health status ".$health."
        My physical activity level ".$activity."
        My food preferences are ".$food. "and Food preference details are".$food_details." 
        My cooking skills are ".$cooking."
        My budget is SAR".$budget.". generate whole plan inside a HTML table with columns of days, meal, food, calories, protein (g), carbs (g) and Fat (g), exercise in a seperate HTML table with column Exercise, Duration and Frequency and Shopping list in a table as well with columns of food and quantity. Throughout the guide, please use concise and clear language that is easy to follow. ";            
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $postdata = array(
            "model" => "text-davinci-003",
            "prompt" => $question,
            "temperature" => 0.4,
            "max_tokens" => 2000,
            "top_p" => 1,
            "frequency_penalty" => 0,
            "presence_penalty" => 0
        );
        $postdata = json_encode($postdata);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: Bearer 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';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $result = json_decode($result, true);
        
        $query = array(
            "user_id" => $this->session->userdata('id'),
            "query_id" => $q->id,
            'response' => $result['choices'][0]['text']
        );          
        $id = $this->user_model->insert_response($query);
        return redirect('user/view_details/'.$id);              
    }
    public function view_details($id){
        $data['query'] = $this->user_model->getrequestbyid($id);
        $data['user_details'] = $this->user_model->getuserdetails();        
        $data['title']="View Details";
        $this->load->view('header', $data);
        $this->load->view('user/details', $data);
        $this->load->view('footer');
    }
    public function pdf($id){
        // Get output html
        $this->load->model('user_model');
        $data = $this->user_model->getrequestbyid($id);
        foreach($data as $q){
            $html = '
            <h2 style="font-size: 25px;font-weight: bold;color: #fe8543;">Request Details</h2>
            <div style="display:flex; justify-content:flex-start; flex-wrap: wrap;">
                <div style="max-width: 10.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0; position: relative;
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Age:</label>
                    <p>'. $q->age.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Height:</label>
                    <p>'.$q->height.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Weight:</label>
                    <p>'.$q->weight.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Physical Activity Level:</label>
                    <p>'.$q->activity_level.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Health Status:</label>
                    <p>'.$q->health_status.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Food Preferences:</label>
                    <p>'.$q->food_preferences.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Cooking Skills:</label>
                    <p>'.$q->cooking_skills.'</p>
                </div>
                <div style="max-width: 16.666667%; flex: 0 0 16.666667%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Budget:</label>
                    <p>$'.$q->budget.'</p>
                </div>                                
                <div style="max-width: 100%; flex: 0 0 100%; -webkit-box-flex: 0;position: relative;                
                padding-right: 15px;
                padding-left: 15px;">
                    <label>Response:</label>
                    <pre>'.$q->response.'</pre>
                </div>
            </div>
            ';
        }        
        
        // Load pdf library
        $this->load->library('pdf');
        
        // Load HTML content
        $this->dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $this->dompdf->render();
        
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("Diet_plan.pdf", array("Attachment"=>1));
                
    }
    public function rate($id){
        $data['user_details'] = $this->user_model->getuserdetails();        
        $data['title']="View Details";
        $this->load->view('header', $data);
        $this->load->view('user/rate',$id);
        $this->load->view('footer');
    }
}



