<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
     <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto bg-info p-1">
                   <div class="card  bg-info">
                    <div class="card-header">
                     <h4 class="text-center">RESUME</h4>
                    </div>
                    <div class="card-body">
                      <form action="data.php" method="post">
                         <div class="form-group">
                         <div class="form-group">
                            <label for=""> NAME</label>
                            <input type="text" name="sname1" class="form-control" />
                         </div>

                            <label for="">CARRIER OBJECTIVE</label>
                            <input type="text" name="carrier" class="form-control" />
                         </div>
                         <div class="form-group">
                            <label for=""> EDUCATION</label>
                            <input type="email" name="edu" class="form-control" />
                         </div>

                         <div class="form-group">
                            <label for=""> QUALIFICATION</label>
                            <div class="form-check">
                               <input type="radio" name="q" value="B.tech" class="check-input" /> B.tech
                               <input type="radio" name="q" value="B.CA"class="check-input" /> B.CA
                            </div>
                         </div>

                         <div class="form-group">
                         <label for="">SkillS</label>
                            <div class="form-check">
                               <input type="checkbox" name="skill[]" value="C/C++" class="check-input" />C/C++
                               <input type="checkbox" name="skill[]" value="WEB devlopment" class="check-input" /> web devlopment
                               <input type="checkbox" name="skill[]" value="python" class="check-input" />python
                               <input type="checkbox" name="skill[]" value="php" class="check-input" /> php
                            </div>
                         </div>

                         <div class="form-group">
                            <label for="">City</label>
                              <select name="city" class="form-control">
                                     <option>Select City</option>
                                     <option value="Bhopal">Bhopal</option>
                                     <option value="Indore">Indore</option>
                                     <option value="Jabalpur">Jabalpur</option>
                              </select>
                         </div>
                         <div class="form-group">
                            <input type="submit" class="btn btn-danger mt-2"/>
                         </div>


                      </form>

                    </div>
                    <div class="card-footer">

                    </div>
                   </div>                 
            </div>
          </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>