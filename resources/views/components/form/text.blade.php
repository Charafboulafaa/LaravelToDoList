<div class="form-groupe">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::text($name, $value, array_merge( ['class' => 'form-control'], $attributes)) }}
</div>