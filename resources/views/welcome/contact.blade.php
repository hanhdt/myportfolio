<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Contact Us</h2>

        <h3 class="section-subheading text-muted">Help me better.</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        {!! Form::open(['method' => 'post', 'url' => 'contacts']) !!}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your Name *',
                        'id' => 'name', 'data-validation-required-message' => 'Please enter your name.', 'required'])
                        !!}

                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Your Email *',
                        'id' => 'email', 'data-validation-required-message' => 'Please enter your email address.',
                        'required']) !!}

                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        {!! Form::label('phone', 'Phone:') !!}
                        {!! Form::input('tel','phone', null, ['class' => 'form-control', 'placeholder' => 'Your Phone
                        *',
                        'id' => 'phone', 'data-validation-required-message' => 'Please enter your phone number.']) !!}

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('message', 'Message:') !!}
                        {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Your Message
                        *',
                        'id' => 'message', 'data-validation-required-message' => 'Please enter a message.', 'required'])
                        !!}

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    {!! Form::submit("Send Message", array("class" => 'btn btn-xl')) !!}
                </div>
            </div>
        {{--</form>--}}
        {!! Form::close() !!}
    </div>
</div>