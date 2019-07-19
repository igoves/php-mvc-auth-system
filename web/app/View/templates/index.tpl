{block name=title}<title>{APP_NAME}</title>{/block}

{block name=content}
    <div class="row">
        <div class="col mt-5">
            {if $is_logged}
                <h1 class="text-center display-4 mb-4">{#hello#}, {$user->forename}!</h1>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                {#my_profile#}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                {#full_name#}
                                            </label>
                                            <div class="col-md-7 form-control-plaintext font-weight-bold">
                                                {$user->forename} {$user->surname}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                {#email#}
                                            </label>
                                            <div class="col-md-7 form-control-plaintext font-weight-bold">
                                                {$user->email}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                {#phone#}
                                            </label>
                                            <div class="col-md-7 form-control-plaintext">
                                                {($user->phone) ? $user->phone : '-'}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-5 text-left text-md-right col-form-label">
                                                {#about#}
                                            </label>
                                            <div class="col-md-7 form-control-plaintext">
                                                {($user->description) ? $user->description : '-'}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        {if $user->picture }
                                            <img class="img-fluid img-thumbnail"
                                                    src="/uploads/{$user->picture}" alt="{$user->forename} {$user->surname}">
                                        {else}
                                        <img class="img-fluid img-thumbnail"
                                                src="/images/s1.jpg"
                                                alt="{$user->forename} {$user->surname}">
                                        {/if}
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a data-ajax="no" href="{$lang_prefix}/logout" class="btn btn-outline-secondary btn-sm">{#logout#}</a>
                            </div>
                        </div>
                    </div>
                </div>
            {else}
                <h1 class="display-1 mb-5">{#hello_world#}!</h1>
                <a href="{$lang_prefix}/registration" class="btn btn-lg btn-outline-primary mr-3">{#registration#}</a>
                <a href="{$lang_prefix}/login" class="btn btn-lg btn-outline-secondary">{#login#}</a>
            {/if}
        </div>
    </div>
{/block}