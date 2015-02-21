<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Contacts</h2>

        <h3 class="section-subheading text-muted">Contacts received.</h3>
    </div>
</div>
<div class="row">
    @foreach($contacts as $contact)
        <div class="col-md-4 col-sm-6 portfolio-item">

            <div class="portfolio-caption">

                <h4><a href="{{url('contacts/' . $contact->id)}}" class="portfolio-link" data-toggle="modal">
                        {{ $contact->name }}</a></h4>

                <p class="text-info"> {{ $contact->email }}</p>

                <p class="text-info">Created at: {{ $contact->created_at }}</p>
            </div>
        </div>
    @endforeach
</div>