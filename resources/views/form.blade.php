
@extends('layout')

@section('content')

    <!-- <h1>Hello, world!</h1> -->
    <!-- <div class="container"> -->
        <!-- <div class="row">
            <div class="col-md-6"> -->
                <form action="{{ route('test.show') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <br>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="{{isset($namee)?$namee:''}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="cars">Choose a car:</label>
                                    <select name="cars" id="cars">
                                        @foreach($rand_data as $data)
                                        <option name="gender">{{ $data }}</option>
                                        @endforeach
                                        <!-- <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                        <option value="audi">Audi</option> -->
                                    </select>
                            </div>
                        </div>
                    </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>    
                        <br>
                        
                       
                </form>
            <!-- </div>
        </div> -->
    <!-- </div> -->
    <!-- </div>
        <form action="#" method="POST">
        @csrf
        <div class="form-group">
                <label>Select</label>
                <?php //$arr=['Mrs']?>

            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
            <br>
        </form>
    </div> -->
    @endsection