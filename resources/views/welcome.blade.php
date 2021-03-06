<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased ">
        <div class="col-md-12 relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
        <form class="user">
  <div class="row mb-2">
      
  
    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" placeholder="Enter Your name">
  </div>
  
  
  <button type="button" onclick="saveuserinfo()" class="btn btn-primary">Next</button>
</form>
<form class="question" id="question" style="display: none;">
<div class="row">
  <label for="question_count" >Question # <span id="question_count" >-</span>?</label>
    
  </div>
  <div class="row">
  <label for="question_heading" id="question_heading" >-</label>
    
  </div>
  <div class="row">
  
    <input type="radio" name="options1" id="1" autocomplete="off">
    <label class="btn btn-secondary" id="option1label"> </label>
    
  </div>
  <div class="row">
  
    <input type="radio" name="options2" id="2" autocomplete="off"> 
    <label class="btn btn-secondary" id="option2label"> </label>
    
  </div>
  <div class="row">
  
    <input type="radio" name="options3" id="3" autocomplete="off"> 
    <label class="btn btn-secondary" id="option3label"></label>
    
  </div>
  <div class="row">
  
    <input type="radio" name="options4" id="4" autocomplete="off"> 
    <label class="btn btn-secondary" id="option4label"></label>
    
  </div>
  <button type="button" onclick="savequestioninfo(1)" class="btn btn-primary">Skip</button>
  
  <button type="button" onclick="savequestioninfo(0)" class="btn btn-primary">Next</button>
</form>
<form class="result" id="question" style="display: none;">
<div class="row">
  <label for="correct_ans_count_heading" id="correct_ans_count_heading" >Correct Ans: <span id="correct_ans_count"></span></label>
    
  </div>
  <div class="row">
  <label for="wrong_ans_heading" id="wrong_ans_heading" >Wrong Ans: <span id="wrong_ans_count"></span></label>
    
  </div>
  <div class="row">
  <label for="skip_ans_heading" id="skip_ans_heading" >Skip Ans: <span id="skip_ans_count"></span></label>
    
  </div>

</form>
        </div>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <script type="text/javascript">


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function saveuserinfo(){


        var name = $("input[name=name]").val();
        var url = '{{ url('saveuserinfo') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
            name:name, 
                },
           success:function(response){
              if(response.success){
                  $('.user').hide();
                  $('.question').show();
                  $('#question_count').html(response.question_count);
                  $('#question_heading').html(response.question_heading);
                  $('#1').val(response.question_option_one);
                  $('#option1label').append(response.question_option_one);
                  $('#2').val(response.question_option_two);
                  $('#option2label').append(response.question_option_two);
                  $('#3').val(response.question_option_three);
                  $('#option3label').append(response.question_option_three);
                  $('#4').val(response.question_option_four);
                  $('#option4label').append(response.question_option_four);
                  
              }else{
                  alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	}
    function savequestioninfo(skip){
var skip_answer=skip;
var selected_option=($("#question input[type='radio']:checked").attr('id'));
var question_count=($("#question_count").text());
if(skip==0){
	if(typeof selected_option === "undefined"){
		alert("Please select any option");
		return false;
	}
}
var url = '{{ url('savequestioninfo') }}';

$.ajax({
   url:url,
   method:'POST',
   data:{
    selected_option:selected_option, 
    question_count:question_count,
    skip_answer:skip_answer, 
        },
   success:function(response){
      if(response.success){
         
          if(response.finish_test){
            $('.user').hide();
          $('.question').hide();
          $('.result').show();
          $('#correct_ans_count').html(response.correct_ans_count);
          $('#wrong_ans_count').html(response.wrong_ans_count);
          $('#skip_ans_count').html(response.skip_ans_count);
          }
          else{
          $('.user').hide();
          $('.question').show();
          $("input:radio").attr("checked", false);
          $('#question_count').html(response.question_count);
         
                  $('#question_heading').html(response.question_heading);
                  $('#1').val(response.question_option_one);
                  $('#option1label').text(response.question_option_one);
                  $('#2').val(response.question_option_two);
                  $('#option2label').text(response.question_option_two);
                  $('#3').val(response.question_option_three);
                  $('#option3label').text(response.question_option_three);
                  $('#4').val(response.question_option_four);
                  $('#option4label').text(response.question_option_four);
          }
                  
                  
          
      }
     
      else{
          alert("Error")
      }
   },
   error:function(error){
      console.log(error)
   }
});
}

    

</script>
</body>
</html>
