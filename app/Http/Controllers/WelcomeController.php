<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DataTables;
use App\Models\User;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $temp = array();
    }

    /**
     * Show the Save User Information.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function saveuserinfo(Request $request)
    {
      
        
        if ($request->ajax()) {
            $session_id =Session::getId();
            DB::beginTransaction();
            try{
                $User = new User;
                $User->name = $request['name'];
                $User->save();
                DB::commit();
                
                Session::put('user_id',$User->id);
                Session::put('tem_question_array',$this->getrendomquestion());
                $getquestion_array=Session::get('tem_question_array');
                
			// RETURNING JSON RESPONSE TO VIEW
             return response()->json(
                [
                    'question_count'=>1,
                    'question_heading'=>$getquestion_array[0]->question,
                    'question_option_one'=>$getquestion_array[0]->answers->option_one,
                    'question_option_two'=>$getquestion_array[0]->answers->option_two,
                    'question_option_three'=>$getquestion_array[0]->answers->option_three,
                    'question_option_four'=>$getquestion_array[0]->answers->option_four,
                    'success' => true,
                    'message' => 'Data inserted successfully'
                ]
            );
             
            }
             catch (\Exception $e) {
             DB::rollback();
             dd($e);
             return response()->json(
                [
                    'success' => false,
                    'message' => 'Data inserted error'
                ]
            );
         }   

        }
    }
	// FETCH 10 RANDOM QUESTIONS
    public function getrendomquestion()
    {
       $get_all_question=Question::with('answers')->inRandomOrder()->limit(10)->get();
       
        return $get_all_question;
        
       
    }
	// UPDATE RESULT
    public function savequestioninfo(Request $request)
    {
      
        
        if ($request->ajax()) {
            
            if($request['question_count'] > 0){
                $getquestion_array=Session::get('tem_question_array');
                $correct_ans_count=0;
                $wrong_ans_count=0;
                $skip_ans_count=0;
                $correct_ans_count=Result::where('user_id',Session::get('user_id'))->pluck('correct_ans')->first();
                $wrong_ans_count=Result::where('user_id',Session::get('user_id'))->pluck('wrong_ans')->first();
                $skip_ans_count=Result::where('user_id',Session::get('user_id'))->pluck('skp_ans')->first();
                if($getquestion_array[$request['question_count']-1]->answers->correct_option == $request['selected_option']){
                   
                    
                        $correct_ans_count =$correct_ans_count+1;
                    
                    

                }
                
                else if($request['skip_answer'] == 1){
                    $skip_ans_count =$skip_ans_count+1;

                }
                else{
                    $wrong_ans_count =$wrong_ans_count+1;
                }
              
             
                //dd($correct_ans_count_new,$wrong_ans_count_new,Session::get('user_id'));
                $flight = Result::updateOrCreate(
                    ['user_id' => Session::get('user_id')],
                    ['correct_ans' => @$correct_ans_count, 'wrong_ans' => @$wrong_ans_count,'skp_ans' => @$skip_ans_count],
                    
                );
                if($request['question_count'] == 10){
                    return response()->json(
                        [
                            'finish_test'=>true,
                            'success' => true,
                            'correct_ans_count'=>$correct_ans_count,
                            'wrong_ans_count'=>$wrong_ans_count,
                            'skip_ans_count'=>$skip_ans_count,
                            'message' => 'Data inserted successfully'
                        ]
    
                    );

                }

                return response()->json(
                    [
                        'question_count'=>$request['question_count']+1,
                        'correct_ans_count'=>$correct_ans_count,
                        'wrong_ans_count'=>$wrong_ans_count,
                        'skip_ans_count'=>$skip_ans_count,
                        'question_heading'=>$getquestion_array[$request['question_count']]->question,
                        'question_option_one'=>$getquestion_array[$request['question_count']]->answers->option_one,
                        'question_option_two'=>$getquestion_array[$request['question_count']]->answers->option_two,
                        'question_option_three'=>$getquestion_array[$request['question_count']]->answers->option_three,
                        'question_option_four'=>$getquestion_array[$request['question_count']]->answers->option_four,
                        'success' => true,
                        'finish_test'=>false,
                        'message' => 'Data inserted successfully'
                    ]

                );
                

            }
          
            $session_id =Session::getId();
            DB::beginTransaction();
            try{
                $User = new User;
                $User->name = $request['name'];
                $User->session_id = $session_id;
                $User->save();
                DB::commit();
               
                Session::put('tem_question_array',$this->getrendomquestion());
                

             return response()->json(
                [
                    'success' => true,
                    'message' => 'Data inserted successfully'
                ]
            );
             
            }
             catch (\Exception $e) {
             DB::rollback();
             dd($e);
             return response()->json(
                [
                    'success' => false,
                    'message' => 'Data inserted error'
                ]
            );
         }   

        }
    }
   
}
