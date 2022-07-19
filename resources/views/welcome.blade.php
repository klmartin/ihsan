@extends('layouts.master')
@section('page_title', 'Admit Student')
@section('content')
    <div class="card">
            <div class="card-header bg-white header-elements-inline">
                <h6 class="card-title">Please fill The form Below To Register as Our Student</h6>

       
            </div>
            <div class="card-body">
                <form method="POST" action=" {{route('admit_save')}} ">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputAddress2">Student Name</label>
                            <input name="full_name" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="inputEmail4">Date of Birth</label>
                          <input name="dob" type="date" class="form-control">
                        </div>
                        <div class="form-group col">
                          <label for="inp">Place of Birth</label>
                          <input name="plceofbirth" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="inp">Age</label>
                          <input name="age" type="number" class="form-control" >
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputAddress">Region</label>
                            <select name="regionid" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                @foreach($region as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                          </select>
                        </div>
                        <div class="form-group col">
                            <label for="inputAddress2">District</label>
                            <select name="districtid" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                @foreach($district as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col">
                          <label for="street">Street</label>
                          <input name="street" type="text" class="form-control">
                        </div>
                         <div class="form-group col">
                          <label for="pobox">P.O.BOX</label>
                          <input name="pobox" type="text" class="form-control">
                        </div>
                        <div class="form-group col">
                          <label for="phoneNo">Phone Number</label>
                          <input name="phoneNo" type="text" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="fathername">Father's Name</label>
                          <input name="fathername" type="text" class="form-control">
                        </div>
                        <div class="form-group col">
                          <label for="fathercareer">Career</label>
                          <input name="fathercareer" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="fatherwplace">Work Place</label>
                          <input name="fatherwplace" type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="mothername">Mother's Name</label>
                          <input name="mothername" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="mothercareer">Career</label>
                          <input name="mothercareer" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="motherwplace">Work Place</label>
                          <input name="motherwplace" type="text" class="form-control" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col" >
                            <label for="expectations">What do You Expect from IHSAN ISLAMIC SECONDARY SCHOOL</label>
                            <textarea name="expectations"  class="form-control"></textarea>
                        </div>
                         <div class="form-group col">
                            <label for="contribute">Who do you want to be/contribute in this earth</label>
                            <input name="contribute" type="text" class="form-control">
                        </div>
                    </div>
                    <hr>
                     <div class="card-header bg-white header-elements-inline">
                         <h6 class="card-title">Previous Schools</h6>
                     </div>
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="prvschool">Name Of STD 7/6 School</label>
                          <input name="prvschool" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="prvschoolregion">Region</label>
                           <select name="prvschoolregion" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                 @foreach($region as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                          </select>
                        </div>
                        <div class="form-group col">
                          <label for="inp">Districts</label>
                           <select name="prvschooldistrict" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                 @foreach($district as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                          </select>
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col">
                          <label for="pslt2pno">PLSL/2P No</label>
                          <input name="pslt2pno" type="number" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="prvschoolhighyear">Year</label>
                          <input name="prvschoolhighyear" type="date" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="prvschoolhighlevel">Highest Level Reached</label>
                          <input name="prvschoolhighlevel" type="text" class="form-control" >
                        </div>
                    </div>
                     <div class="form-row">
                        <div class="form-group col">
                          <label for="prvschoolhighyear">Year</label>
                          <input name="prvschoolhighyear" type="date" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="prvschoolhighreason">Reasons for not sitting std 7/6 national exam</label>
                          <textarea name="prvschoolhighreason" class="form-control"></textarea> 
                        </div>
                    </div>
                    <hr>
                     <div class="card-header bg-white header-elements-inline">
                         <h6 class="card-title">Islamic Knowledge and Quar-anic Level</h6>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="islmlevel">Level of Islamic Knowledge Reached</label>
                          <input name="islmlevel" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="qrncomp">Quran Reading Competence</label>
                          <input name="qrncomp" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="juzno">No of Juzuu Memorized</label>
                          <input name="juzno" type="number" class="form-control" >
                        </div>
                    </div>
                    <hr>
                     <div class="card-header bg-white header-elements-inline">
                         <h6 class="card-title">transfer Cases Co-Level</h6>
                     </div>
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="transschoolname">Name of School</label>
                          <input name="transschoolname" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="transschlregion">Region</label>
                           <select name="transschlregion" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                 @foreach($region as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                          </select>
                        </div>
                        <div class="form-group col">
                          <label for="transschlndistrict">District</label>
                           <select name="transschlndistrict" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                 @foreach($district as $data)
                                <option value=" {{$data->id}} "> {{$data->name}} </option>
                                @endforeach
                          </select>
                        </div>
                        <div class="form-group col">
                          <label for="transttnaexamno">TTNA Exam No/ Year</label>
                          <input name="transttnaexamno" type="number" class="form-control" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                          <label for="transpremno">PremsNo</label>
                          <input name="transpremno" type="number" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="translevel">Highest Level Reached</label>
                          <input name="translevel" type="text" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="translevelyear">Year</label>
                          <input name="translevelyear" type="date" class="form-control" >
                        </div>
                        <div class="form-group col">
                          <label for="transclass">Class Applying to Join</label>
                          <input name="transclass" type="number" class="form-control">
                        </div>
                        <div class="form-group col">
                          <label for="transreasons">Reasons for Transfer</label>
                          <textarea name="transreasons" class="form-control"></textarea>
                        </div>
                    </div>
                    

                 
                  <button type="submit" class="btn btn-primary">Join</button>
                </form>   
            </div>
        </div>
    </body>
</html>