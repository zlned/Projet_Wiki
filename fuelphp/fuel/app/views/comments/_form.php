<?php echo Form::open(); ?>
<p>
    <?php echo Form::label('Name', 'name'); ?>
    <?php echo Form::input('name', Input::post('name', isset($comment) ? $comment->name : '')); ?>
</p>
<p>
    <?php echo Form::label('Comment', 'comment'); ?>
    <?php echo Form::textarea('comment', Input::post('comment', isset($comment) ? $comment->comment : ''), array('cols' => 60, 'rows' => 8)); ?>
</p>
<?php echo Form::hidden('message_id', Input::post('message_id', isset($message) ? $message : '')); ?>
<div class="actions">
    <?php echo Form::submit(); ?>
</div>
<?php echo Form::close(); ?>