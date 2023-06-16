<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Building Permission System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="text-center my-4">Online Building Permission System</h1>
    <h2>Application</h2>

    <div class="mb-3">
        <label for="applicationType" class="form-label">Application Type</label>
        <select class="form-select" id="applicationType">
          <option value="">Please select</option>
          <option value="new">New</option>
          <option value="renew">Renew</option>
          <option value="addition">Addition/Alteration</option>
        </select>
      </div>

      <h2>Basic Information</h2>
      <div class="mb-3">
        <label for="buildingType" class="form-label">Building Type</label>
        <select class="form-select" id="buildingType">
          <option value="">Select building type</option>
          <option value="residential">Residential</option>
          <option value="commercial">Commercial</option>
          <option value="industrial">Industrial</option>
          <option value="institutional">Institutional</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label for="buildingSize" class="form-label">Building Size</label>
        <input type="text" class="form-control" id="buildingSize" placeholder="Enter building size">
      </div>
      <div class="mb-3">
        <label for="buildingLocation" class="form-label">Building Location</label>
        <input type="text" class="form-control" id="buildingLocation" placeholder="Enter building location">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
