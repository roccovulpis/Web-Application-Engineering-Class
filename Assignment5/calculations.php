<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light  bg-light">
            <a class="navbar-brand" href="#">Statistics Toolbox</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/Assignment5/index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <div class="ml-auto">
              <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
            </div>
          </nav>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
              <h1>Enter size of an array: </h1>
              <form>
                <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Enter an integer">
                </div>
                    <label class="form-label">Select an option</label>
                    <select>
                      <option value="mean">Compute Mean</option>
                      <option value="medeian">Compute Median</option>
                      <option value="mode">Compute Mode</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-outline-secondary" type="submit">Submit</button>
                </div>
          </form>
    </div>

</body>
</html>