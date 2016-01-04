<div class="form-group {{ ($control->hasFormErrors()) ? 'has-error' : '' }}">
    <label for="{{ $control->getFormName() }}">
        {{ $control->getFormLabel() }}
    </label>

    <div class="row">
        <div class="col-xs-8">
            <input name="{{ $control->getFormName('length') }}" type="text" value="{{ $control->getFormValue('length') }}" class="form-control" />
        </div>
        <div class="col-xs-4" style="padding-left: 0;">
            <select name="{{ $control->getFormName('units') }}" class="form-control">
                <option value="">Please select...</option>
                <option value="mm" {!! 'mm' === (string) $control->getFormValue('units') ? 'selected="selected"' : '' !!}>mm</option>
                <option value="cm" {!! 'cm' === (string) $control->getFormValue('units') ? 'selected="selected"' : '' !!}>cm</option>
                <option value="m" {!! 'm' === (string) $control->getFormValue('units') ? 'selected="selected"' : '' !!}>m</option>
                <option value="km" {!! 'km' === (string) $control->getFormValue('units') ? 'selected="selected"' : '' !!}>km</option>
            </select>
        </div>
        @if ($control->hasFormErrors())
        <div class="col-xs-12">
            <span id="helpBlock" class="help-block">
                @foreach (array_flatten($control->getFormErrors()) as $error)
                <p>{{ $error }}</p>
                @endforeach
            </span>
        </div>
        @endif
    </div>
</div>
