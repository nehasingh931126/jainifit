<!-- resources/views/common/errors.blade.php -->

@if (count($errors) > 0)
    <!-- Form Error List -->
    <div class="row">
        <div class=col-md-4>
            <div class="pl-2">
                <div class="alert alert-danger mt-3">
                    <h6 class="alert-heading">Whoops! Something went wrong!</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif