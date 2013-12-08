@if($errors->any())
    <ul>
      {{ implode('', $errors->all('<li>:message</li>'))}}
    </ul>
  @endif

  {{ Form::open(array('route' => 'phrase.store')) }}

    <p>{{ Form::label('phrase', 'Phrase') }}
      {{ Form::text('phrase') }}</p>

    <p>{{ Form::submit('Save Phrase') }}</p>

  {{ Form::close() }}