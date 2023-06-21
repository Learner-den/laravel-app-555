
  <div class="container">
    <button type="button" class="btn btn-primary" id="create-app-form">Create App</button>
    <div id="app-form-container" style="display:none;">
      <h2>Create App Form</h2>

      <form method="POST" action="{{ route('app.create') }}">

        @csrf

        <!-- Scopes Checkbox Input -->
        <div class="form-group">


        <label for="appname">App name:</label>
          <input type="text" id="appname" name="appname"> <br><br>


        <label for="redirect_uri">Redirect URI:</label>
          <input type="text" id="redirect_uri" name="redirect_uri" required><br>


          <label for="scopes">Scopes:</label>
          @foreach($scopes as $scope)
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="scope_{{ $scope->id }}" name="scopes[]" value="{{ $scope->id }}">
              <label class="form-check-label" for="scope_{{ $scope->id }}">{{ $scope->name }}</label>
            </div>
          @endforeach
        </div>

        <button id="create-app-button" class="create-button" type="submit">Create app button</button>

      </form>
    </div>
  </div>

  <script>
    // Show/hide the app form when the create app button is clicked
    document.getElementById("create-app-form").addEventListener("click", function() {
      document.getElementById("app-form-container").style.display = "block";
    });
  </script>


