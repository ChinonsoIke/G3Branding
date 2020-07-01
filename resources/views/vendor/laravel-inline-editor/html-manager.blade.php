@if(Auth::guard("admin")->check())
{{-- @if (Gate::allows('laravel-inline-editor')) @if($user->can('edit articles'))--}}

@include('ckfinder::setup')

    <inline-manager inline-template>
        <div id="inline-manager">
            <ul>
                <li id="applyChanges" @click="applyChanges" title="Apply changes">
                    Apply changes
                </li>
            </ul>
        </div>
    </inline-manager>
@endif