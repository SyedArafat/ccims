<div class="modal fade" id="updateInfo" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Information</h4>
                <button style="text-align: right" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {!! Form::open(['method' => 'post', 'action' => ['ProfileController@updateProfileInfo', $user->id], 'files' => true]) !!}
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control form-control-text" id="name" placeholder="Enter name" value=" {{ $user->name }} " name="name">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control form-control-text" id="name" placeholder="Enter mobile" value=" {{ $user->mobile }} " name="mobile">
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" class="form-control form-control-text" id="address">{{ $user->profile->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea name="bio" class="form-control form-control-text" id="bio">{{ $user->profile->bio }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Update</button>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
