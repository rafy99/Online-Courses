<?php require_once(app_path('views/header.php')); $course_id = $data['course']->id; ?>

<style type="text/css">
    p{
        font-size: 30px;
    }
</style>



<div class="container">

<h3>Create New Quiz</h3>

    <form id="form" action="<?=url('quiz/store/'.$course_id)?>" method="POST">

        <div class="pb-5">
          <label for="name">Quiz Name</label>
          <input type="text" id='name' name='name' value="Name" placeholder="Name" class="form-control">
        </div>

        <div class="pb-5">
          <label for="description">Quiz Description</label>
          <textarea class="form-control" id='description' name='description'>Enter Description</textarea>
        </div>

        <div class="pb-5">
          <label for="week_num">Quiz Week</label>
          <input type="number" id='week_num' name='week_num' value="1" placeholder="week_num" class="form-control">
        </div>

        <input type="hidden" id='hidden' name="value">
    </form>


    <div class="pt-2">
        <button class="float-right btn btn-primary " onclick="add()">Add new Question</button>
    </div>

    <br><br><br>

    <div class="text-center mb-5">
        <button class="w-25 btn btn-success align-center" onclick="save()"> SAVE </button>
    </div>









</div>







<?php require_once(app_path('views/footer.php')); ?>
