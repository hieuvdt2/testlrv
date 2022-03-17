<a href="{{ route('categories.create') }}">create</a>
<table class="table">
  <thead>
    <tr>
      <th >#</th>
      <th >Name</th>
      <th >DESCRIPTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
      <tr>
        <th scope="row">{{ $category->id }}</th>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
      </tr>
    @endforeach
    
  </tbody>
</table>