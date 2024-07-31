<!-- Modal -->
  <!-- Edit User Modal -->
  <div class="modal fade" id="addUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Add User</h3>
            {{-- <p class="text-muted">Updating user details will receive a privacy audit.</p> --}}
          </div>
          <form id="addUserForm" class="row g-3" method="POST" action="{{ route('pages-user-store')}}">
            @csrf
            <div class="col-12 col-md-6">
              <label class="form-label" for="first_name">First Name</label>
              <input
                type="text"
                id="first_name"
                name="first_name"
                class="form-control"
                placeholder="John" required/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="last_name">Last Name</label>
              <input
                type="text"
                id="last_name"
                name="last_name"
                class="form-control"
                placeholder="Doe" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="username">Username</label>
              <input
                type="text"
                id="username"
                name="username"
                class="form-control"
                placeholder="Jika Kosong akan disamakan dengan Email" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserPhone">Phone Number</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                <input
                  type="text"
                  id="phone"
                  name="phone"
                  class="form-control phone-number-mask"
                  placeholder="85712341234" />
              </div>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="password">Password</label>
              <input
                type="password"
                id="password"
                name="password"
                class="form-control"
                required/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="password_confirm">Repeat Password</label>
              <input
                type="password"
                id="password_confirm"
                name="password_confirm"
                class="form-control"
                 required/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="email">Email</label>
              <input
                type="text"
                id="email"
                name="email"
                class="form-control"
                placeholder="example@domain.com" required/>
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="email_external">Email Eksternal</label>
              <input
                type="text"
                id="email_external"
                name="email_external"
                class="form-control"
                placeholder="example@domain.com" />
            </div>
            <div class="col-12 col-md-12">
              <label class="form-label" for="email_external_edit">Role</label>
              <select name="role_id" class="form-control">
                <option value="">Silahkan Pilih</option>
                <option value="1">Administrator</option>
                <option value="2">Admin Mesjid</option>
                <option value="3">Jamaah/Member</option>
              </select>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
              <button
                type="reset"
                class="btn btn-label-secondary"
                data-bs-dismiss="modal"
                aria-label="Close">
                Cancel
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ Edit User Modal -->
