
<div class="page-header">
  <div class="row align-items-center mb-3">
    <div class="col-sm mb-2 mb-sm-0">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-no-gutter">
          <li class="breadcrumb-item"><a class="breadcrumb-link" href="http://localhost/Assignment/Category/index"></a></li>
          <!-- icon home -->
          <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
      </nav>

      <h1 class="page-header-title">Categories<span class="badge badge-soft-dark ml-2">4</span></h1>
    </div>
    <div class="col-sm-auto">
      <a href="http://localhost/Assignment/Category/new" class="btn btn-primary">Add Category</a>
    </div>
  </div>
</div>

<div class="card">
  <div class="table-responsive">
    <table class="table table-borderless card-table">
      <thead class="thead-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th colspan="2"></th>
      </tr>
      </thead>

      <tbody>
      <% @categories.each do |category| %>
        <tr>
          <td><%= category.id %></td>
          <td><%= category.name %></td>
          <td><a href="http://localhost/Assignment/Category/edit">Edit</td>
          <td><a href="#">Delete</td>
        </tr>
      <% end %>
      </tbody>
    </table>
  </div>
</div>

