@extends('layouts.client.admin')

@section('content')
<div class="container mt-5">
  <div class="float-end">
    <a href="{{ route('colis.downloadTemplate') }}" class="btn btn-success">Download Template</a>

  </div>

  <div class="card">
      <div class="card-header">
        <div class="card-title">
          Import Colis
        </div>
      </div>

      <div class="card-body">
          <form id="uploadForm" method="POST" action="{{ route('colis.import') }}" class="row" enctype="multipart/form-data">
              @csrf
              <label for="file">Choose Excel File</label>
              <div class="form-group col-10">
                  <input type="file" class="form-control" id="file" name="file" accept=".xlsx, .xls">
              </div>
              <div class="form-group col-2">
                  <button type="submit" class="btn btn-primary">Import</button>
              </div>
          </form>
          <div class="d-flex justify-content-center mt-5">

            <div id="dropArea" class="border p-5  d-flex jutify-content-center align-items-center" style="width: 300px;height:200px;background-color:#d1d1d1;border-radius:5%">
                Drag and drop your file here
            </div>
          </div>
      </div>
  </div>
        
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let dropArea = document.getElementById('dropArea');
        let fileInput = document.getElementById('file');

        dropArea.addEventListener('dragover', function (e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.classList.add('bg-info');
        });

        dropArea.addEventListener('dragleave', function (e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.classList.remove('bg-info');
        });

        dropArea.addEventListener('drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            dropArea.classList.remove('bg-info');

            let files = e.dataTransfer.files;
            fileInput.files = files;
        });
    });
</script>
@endsection
