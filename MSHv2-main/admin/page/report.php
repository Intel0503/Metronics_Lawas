
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
        <div>
        <label class="col-form-label mt-" for="inputDefault">Name</label>
        <input type="text" class="form-control" placeholder="Ex: Dela Cruz Juan" id="inputDefault">
        </div>
      <div>
      <label for="exampleSelect1" class="form-label mt-4">Violations</label>
      <select class="form-select" id="exampleSelect1" placeholder="Select">
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
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<table class="table table-hover mt-5">
    <thead class="h3">
      <tr>
        <th>Student No.</th>
        <th>Violation</th>
        <th>Evidence</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="h5">
      <tr >
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>View</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td></td>
        <td> <a href="">View </a></td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td></td>
        <td>View</td>
      </tr>
      <tr>
        <td>Jeff</td>
        <td>Dooley</td>
        <td></td>
        <td>View</td>
      </tr>
    </tbody>
  </table>
</div>


