{block name=title}<title>{$title} - {APP_NAME}</title>{/block}

{block name=content}
    <div class="card card-default">
        <div class="card-body">
            <h3 class="card-title text-center">{#create_new_account#}</h3>
            <form id="regForm" action="{$lang_prefix}/registration" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="forename-input">{#forename#} <span class="text-danger">*</span></label>
                                    <input type="text" id="forename-input" class="form-control"
                                           name="forename" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="surname-input">{#surname#} <span
                                                class="text-danger">*</span></label>
                                    <input type="text" id="surname-input" class="form-control" name="surname" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email-input">{#email#} <span
                                                class="text-danger">*</span></label>
                                    <input type="text" id="email-input" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone-input">{#phone#}</label>
                                    <input type="text" id="phone-input" class="form-control phone" name="phone"
                                           placeholder="+38(999)999-99-99" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone-input">{#about#}</label>
                                    <textarea class="form-control" name="description"
                                              placeholder="{#about_placeholder#}"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-input">{#password#} <span class="text-danger">*</span></label>
                                    <input type="password" id="password-input" class="form-control"
                                           name="password"/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password-repeat-input">{#password_repeat#} <span
                                                class="text-danger">*</span></label>
                                    <input type="password" id="password-repeat-input" class="form-control"
                                           name="password_repeat"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="phone-input">{#load_photo#}</label>
                            <div id="preview" class="h-25 d-inline-block">
                                <img class="img-fluid mb-3 img-thumbnail"
                                     src="/images/s1.jpg"/>
                            </div>
                            <div class="custom-file" id="customFile">
                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                       aria-describedby="fileHelp" name="picture" accept="image/*">
                                <label class="custom-file-label" for="exampleInputFile">
                                    {#select_file#}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="csrf_token" value="{$token}"/>
                <button type="submit" class="btn btn-primary ">{#registration#}</button> <small class="ml-3"><a href="{$lang_prefix}/login">{#i_have_account#}</a></small>
            </form>
        </div>
    </div>
{/block}