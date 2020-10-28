<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../style/managerPage.css">
    <!-- SNS icon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Manager</title>
    <style>
    body{background-color: #E8F3F9;}
    #updateField, #createField{
      display: none;
    }

    </style>


  </head>

  <body class="container-fluid">
      <header class="row">
        <a href="../home.html" title="Log Out!" class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-0 col-sm-6 offset-lg-0 col-lg-3"> <h2 >Co - Tracker Ltd.</h2> </a>
        <h4 class="offset-md-4 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-5 col-lg-2">Manager</h4>
        <h4 class="offset-md-0 col-md-2 offset-0 col-6 offset-sm-0 col-sm-3 offset-lg-0 col-lg-2">username</h4>
      </header>

    <!-- START: left-Side Menu -->
    <div class="row">
      <div class="offset-md-0 col-md-4 offset-1 col-10 offset-sm-2 col-sm-8 offset-lg-0 col-lg-3">
        <div class="btn-panel row ">
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["generateReport"] } }]' class=" offset-md-0 col-md-12">Generate Test Report</a> -->
          <a href="./manager.php" class=" offset-md-0 col-md-12">Generate Test Report</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["registerTestCenter"] } }]' class=" offset-md-0 col-md-12">Register Test Center</a> -->
          <a href="./register-center-view.html" class=" offset-md-0 col-md-12">Register Test Center</a>

          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["recordTester"] } }]' class=" offset-md-0 col-md-12">Record Tester</a> -->
          <a href="./record-tester-view.php" class=" offset-md-0 col-md-12">Record Tester</a>
          <hr>
          <!-- <a [routerLink]='[{ outlets: { managerRouter: ["manageTestKitStock"] } }]' class="offset-md-0 col-md-12">Manage Test Kit stocks</a> -->
          <a href="./record-kit-view.php" class="offset-md-0 col-md-12">Manage Test Kit stocks</a>

          <hr>
        </div>
      </div>


    <!-- Start: Main Content  -->
      <div class="main-content offset-md-0 col-md-8 offset-0 col-12 offset-sm-1 col-sm-10 offset-lg-1 col-lg-8">
        <div class=" col-12 col-lg-12">
          <form (submit)="onChoose(form)" id="showField" class="mt-4 col-12 row">
            <!-- <mat-form-field class=" offset-2 col-8 offset-md-0 col-md-5 col-lg-4"> -->

              <div class="form-group offset-1 col-12 offset-md-0 col-md-5 offset-lg-0 col-lg-4">
                <!-- <label>Test Kit</label> -->
                <select name="kitID" required placeholder="text" style="margin-top:7px;" class="form-control">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="mercedes">Mercedes</option>
                  <option value="audi">Audi</option>
                </select>
              </div>

            <!-- </mat-form-field> -->

            <button onclick="document.getElementById('updateField').style.display = 'block';
              document.getElementById('createField').style.display = 'none';"
              class="offset-4 col-6 offset-md-0 col-md-3 offset-lg-0 col-lg-2 btn btn-primary mb-4  "
              type="button" style="margin-top: 4px;" >Display</button>
            <button onclick="document.getElementById('updateField').style.display = 'none';
              document.getElementById('createField').style.display = 'block';"
              pButton class="offset-4 col-6 offset-md-1 col-md-3 offset-lg-1 col-lg-2 btn btn-block btn-link mb-4  "
              type="button" style="margin-top: 4px; font-size: 20px; border: solid gray 1px;" >New Kit?</button>
          </form>



            <form (submit)="onCreate(createForm)" #createForm="ngForm" id="createField"  class="col-12">
              <mat-form-field class=" offset-2 col-8 offset-md-0 col-md-5 col-lg-4">
                <input matInput type="text" placeholder="Test Kit name" class="form-control"  name="name" ngModel required minlength="3" #name="ngModel">
                <mat-error *ngIf="name.invalid" >Please, enter the name</mat-error>
              </mat-form-field>
              <mat-form-field class=" offset-2 col-8 offset-md-0 col-md-5 offset-lg-1 col-lg-4">
                <input matInput class="form-control" placeholder="Number of stocks" type="number" name="numOfStocks" ngModel required minlength="3" #numOfStocks="ngModel"/>
                <mat-error *ngIf = "numOfStocks.invalid" >Please, enter the number</mat-error>
              </mat-form-field>
              <div class="col-7"></div>
              <button class="offset-3 col-6 offset-md-4 col-md-4 offset-lg-3 col-lg-3 btn btn-success btn-lg btn-block"
                type="submit" style="margin-top: 1rem;">Submit</button>

            </form>

            <form (submit)="onAdd(addForm)" #addForm="ngForm"  id="updateField" class="col-12">
              <mat-form-field class=" offset-2 col-8 offset-md-0 col-md-5 offset-lg-2 col-lg-5">
                <input matInput type="number" placeholder="Number of Stocks" class="form-control"  name="stockNumber" ngModel required #stockNumber="ngModel">
                <mat-error *ngIf="stockNumber.invalid" >Please, enter the number</mat-error>
              </mat-form-field>

              <button class="offset-3 col-6 offset-md-1 col-md-4 offset-lg-3 col-lg-3 btn btn-success btn-lg btn-block"
                type="submit" style="margin-top: 1rem;">Submit</button>

            </form>

          </div>
      </div>
    </div>
  </body>
</html>
