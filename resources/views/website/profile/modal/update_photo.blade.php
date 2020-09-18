<div class="modal fade" id="updatePhoto" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Photo</h4>
                <button style="text-align: right" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'post', 'action' => ['ProfileController@updateProfilePhoto', $user->id], 'files' => true]) !!}
                <div class="form-group">
                    <label for="profile_photo">Profile Photo:</label>
                    <input type="file" name="profile_photo" required value="{{ old('profile_photo') }}" accept="image/*" class="form-control @error('profile_photo') is-invalid @enderror" id="profile_photo">
                    @error('profile_photo')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-default">Submit</button>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
