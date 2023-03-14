<div class="col-md-6">
    <div class="title-box-2">
        <h5 class="title-left">Send Message Us</h5>
    </div>
    <div>
        <form method="POST" action="{{ route('contacts.store') }}">
            {{ csrf_field() }}
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
            <div id="errormessage"></div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                        @error('name')
                            <small class="text-danger mt-2"> <strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                        @error('email')
                            <small class="text-danger mt-2"> <strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" value="{{ old('phone') }}"/>
                        @error('phone')
                            <small class="text-danger mt-2"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}"/>
                        @error('subject')
                            <small class="text-danger mt-2"> <strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"
                            placeholder="Message" value="{{ old('subject') }}"></textarea>
                        @error('message')
                            <small class="text-danger mt-2"> <strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="button button-a button-big button-rouded">
                        Send Message
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>