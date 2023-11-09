<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            All Category
            Hi... {{Auth::user()->name}}
        </b>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="col-md-8"> 
          <div class="card">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">User ID</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>
  <tbody>
    @php
        $i = 1;
    @endphp
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$category->category_name}}</td>
      <td>{{$category->user_id}}</td>
      <td>{{$category->created_at }}</td>
    </tr>
    @endforeach 
  </tbody>
</table>
</div>
</div>
<div class="col-md-4">
<div class="card">
<form>
  <div class="mb-3">
    <label for="category-name" class="form-label">Category Name</label>
    <input type="text" class="form-control" name="category_name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
        </div>
    </div>
</x-app-layout>
