<label>
{{ $control->getFormLabel() }}
</label>

<div class="form-group {{ ($control->hasFormErrors()) ? 'has-error' : '' }}">

    <input name="{{ $control->getFormName('length') }}" type="text" value="{{ $control->getFormValue('length') }}" class="form-control" />

    <select name="{{ $control->getFormName('units') }}" class="form-control">
        <option value="">Please select...</option>
        <option value="mm" {{ 'mm' === $control->getFormValue('units') ? 'selected="selected"' : '' }}>mm</option>
        <option value="cm" {{ 'cm' === $control->getFormValue('units') ? 'selected="selected"' : '' }}>cm</option>
        <option value="m" {{ 'm' === $control->getFormValue('units') ? 'selected="selected"' : '' }}>m</option>
        <option value="km" {{ 'km' === $control->getFormValue('units') ? 'selected="selected"' : '' }}>km</option>
    </select>
    @if ($control->hasFormErrors())
        <span id="helpBlock" class="help-block">
            <ul>
                @foreach (array_flatten($control->getFormErrors()) as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </span>
    @endif
</div>
