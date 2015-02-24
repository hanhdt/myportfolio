<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Contacts</h2>

        <h3 class="section-subheading text-muted">Contacts received.</h3>
    </div>
</div>
<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <th class="text-uppercase text-info">Name</th>
            <th class="text-uppercase text-info">Email</th>
            <th class="text-uppercase text-info">Created at</th>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <div class="portfolio-caption">
                            <td>
                                <h4><a href="{{url('contacts/' . $contact->id)}}" class="portfolio-link"
                                       data-toggle="modal">
                                        {{ $contact->name }}</a></h4>
                            </td>
                            <td>
                                <p class="text-info"> {{ $contact->email }}</p>
                            </td>

                            <td>
                                <p class="text-info">Created at: {{ $contact->created_at }}</p>
                            </td>
                        </div>
                    </div>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>