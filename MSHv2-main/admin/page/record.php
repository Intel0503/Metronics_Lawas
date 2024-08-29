
<div class="container-fluid row justify-content-center">
<button type="button" class="btn btn-success pl " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Report</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Report Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="d-flex flex-row">
        <div class="col-6 mb-3">
        <label class="col-form-label mt-" for="inputDefault">Student Number</label>
        <input type="text" class="form-control w-25 " placeholder="Ex: 1-00123" id="inputDefault">
        </div>

        <div class="col-10 mb-3">
        <label class="col-form-label mt-" for="inputDefault">Name</label>
        <input type="text" class="form-control w-50" placeholder="Ex: Dela Cruz Juan" id="inputDefault">
        </div>
        </div> 

        <div class="d-flex flex-row justify-content-between">
        <div class="col-6 mb-3">
        <label for="exampleSelect1" class="form-label mt-4">Gender</label>
        <select class="form-select w-25" id="exampleSelect1" placeholder="Select">
            <option>No Selection</option>
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
    

    <div class="col-4 mb-3">
      <label for="exampleSelect1" class="form-label mt-4">Strand</label>
      <select class="form-select w-25" id="exampleSelect1" placeholder="Select">
        <option>No Selection</option>
        <option>GAS</option>
        <option>ABM</option>
        <option>ICT</option>
        <option>STEM</option>
        <option>HUMSS</option>
      </select>
    </div>
    

    <div class="col-2 mb-3">
      <label for="exampleSelect1" class="form-label mt-4">Year Level</label>
      <select class="form-select w-25" id="exampleSelect1" placeholder="Select">
        <option>No Selection</option>
        <option>Male</option>
        <option>Female</option>
      </select>
    </div>
</div> 
        
      <div>
      <label for="exampleSelect1" class="form-label mt-4">Violations</label>
      <select class="form-select w-50" id="exampleSelect1" placeholder="Select">
        <option>Choose....</option>
        <option>Bullying</option>
        <option>No ID</option>
        <option>Drunk</option>
        <option>Not Wearing Proper Uniform</option>
        <option>Others</option>
      </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>