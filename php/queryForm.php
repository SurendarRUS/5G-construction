  <!-- Button trigger modal -->
<button type="button" class="btn btn-warning estBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Get Estimation
</button>

<!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <section class="h-70">
  <div class="container h-70">
    <div class="row d-flex justify-content-center align-items-center h-70">
      <div class="col-lg col">
        <div class="card card-registration">
          <div class="row g-0">
            <!-- <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div> -->
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <h3 class="text-uppercase">Get Estimate for your Plan</h3>

              <form action="php/admin/database.php" method="post">
                <div class="row">
                  <div class="col-lg-md-6 col-md-6">
                    <div class="form-outline">
                      <input type="text" id="form3Example1m" name="firstName" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-lg-md-6 col-md-6">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" name="lastName" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>
                <div class="form-outline">
                  <input type="text" id="form3Example97" name="mail" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>
                <div class="form-outline">
                  <input type="number" id="form3Example99" name="pNumber" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example99">Phone number</label>
                </div>
                <div class="form-outline">
                  <input type="number" id="form3Example95" name="plotSize" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example95">Plot Size in sq.ft</label>
                </div>
                <div class="form-outline">
                  <input type="text" id="form3Example8" name="addres" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>


                <div class="form-outline">
                  <input type="text" id="form3Example90" name="pincode" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example90">Pincode</label>
                </div>

                
                <div class="d-flex justify-content-end pt-3">
                  <!-- <button type="reset" class="btn btn-light btn-lg">Reset all</button> -->
                  <button type="submit" name="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
      </div>
      
    </div>
  </div>
</div>
