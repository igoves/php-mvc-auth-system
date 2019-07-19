{block name=title}<title>{$title} - {APP_NAME}</title>{/block}

{block name=content}
    <div class="row">
        <div class="offset-lg-4 col-lg-4 offset-md-3 col-md-6 offset-sm-2 col-sm-8">
            <div class="card card-default">
                <div class="card-body">
                    <h3 class="card-title text-center">{#account_login#}</h3>
                    <form id="loginForm" action="{$lang_prefix}/login" method="post">
                        <div class="form-group">
                            <label for="email-input">{#email#} <span class="text-danger">*</span></label>
                            <input type="text" id="email-input" class="form-control" name="email" autofocus/>
                        </div>
                        <div class="form-group">
                            <label for="password-input">{#password#} <span class="text-danger">*</span></label>
                            <input type="password" id="password-input" class="form-control" name="password"/>
                        </div>
                        <div class="checkbox">
                            <label for="remember">
                                <input type="checkbox" id="remember" name="remember"/> {#remember_me#}
                            </label>
                        </div>
                        <input type="hidden" name="csrf_token" value="{$token}"/>
                        <button type="submit" class="btn btn-primary btn-block">{#sign_in#}</button>
                        <small class="d-block text-center mt-2">
                            <a href="{$lang_prefix}/registration">{#create_account#}</a>
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}