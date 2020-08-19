@extends('layouts.conten')


@section('content')

<CENTER><h1>DATA TEKNISI YANG TERDAFTAR</h1></CENTER>
<BR></BR>


<div class="col-lg-15">
                                <div class="main-card mb-20 card">
                                    <div class="card-body"><h5 class="card-title">Data </h5>
                                   
                                        <div class="table-responsive">
                                            <table class="mb-0 table">
                                                <thead>
                                                <tr>
                                                  
                                                    <th>Nama</th>
                                                    <th>Tgl terdaftar</th>
                                                    <th>Level</th>
                                                    
                                                    
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($tek as $t)
                                                   
                                                  <tr>
                                                  
                                                    <td>{{$t->name}}</td>
                                                    <td>{{$t->created_at}}</td>
                                                    <td>{{$t->level}}</td> 
                                                    <td> 
                                                
                                                
                                                    
                                                    
                                                </tr>
                                                
                                                @endforeach
                                                </tbody>
                                                </table>   
                                               
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
</div> </div>
</div>
             
                      
      

                         
@endsection

