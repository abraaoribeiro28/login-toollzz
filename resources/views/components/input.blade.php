@props(['label' => false])

<div class="input-group @error($attributes['name']) input-error  @enderror">
    @if($label)
        <label for="{{ $attributes['id'] }}"> {{ $label }} </label>
    @endif

    <input {!! $attributes !!}>

    @error($attributes['name'])
        <div class="error">{{ $message }}</div>
    @enderror
</div>
