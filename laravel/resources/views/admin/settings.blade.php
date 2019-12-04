@extends('admin.index')

@section('content')
        <div class="row mt-3 mb-3" style="
            display: flex;
            justify-content: space-between;
            padding: 1em;
            box-sizing: border-box;">
        <div>
            <h2>Settings list</h2>
        </div>
        <form action="{{ route('admin.settings.updateValue', ['settings'=>$settings, 'key' => $key]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <button type="submit" class="btn btn-warning">Save Settings</button>
            </div>
        </div>
            <div class="form-group row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col-3">Settings name</th>
                            <th scope="col-9">Settings value</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{ $setting -> settings_name }}</td>

                                    <td>
                                        @if($setting -> settings_name == 'Link_popup_en' or $setting -> settings_name == 'Link_popup_de' )
                                            <textarea  id="mytextarea" name="{{ $setting -> settings_name }}"  data-setting-id="{{ $setting->id }}">{{ old('settings_value ') ? old('settings_value ') :$setting -> settings_value }}</textarea>
                                        @else
                                            <input type="text" name="{{ $setting -> settings_name }}" class="setting_value-input col-12" data-setting-id="{{ $setting->id }}"  value="{{ old('settings_value ') ? old('settings_value ') :$setting -> settings_value }}">
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
@endsection

