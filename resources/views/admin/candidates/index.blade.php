<x-app-layout>
    
    @include('admin.candidates.candidates-menu')
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>ARN</th>
                            <th>Job Applied For</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AVNL041023240001</td>
                                
                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>
                              
                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                <td>
                                
                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-bg-light bg-light bg-opacity-10 border border-success border-opacity-10 rounded-2">To be Screened</small>

                                    

                                    
                                </td>
                              
                                <td>
                                    <x-icons.verify href=""/>
                                   

                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>AVNL041023240002</td>
                                
                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>
                              
                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                
                                <td>
                                
                                  
                                    <small
                                    class="d-inline-flex px-2 py-1 fw-semibold text-warning bg-warning bg-opacity-10 border border-success border-opacity-10 rounded-2">On hold</small>


                                    

                                  
                                    
                                </td>
                                
                                <td>
                                    <x-icons.verify href=""/>

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>AVNL041023240002</td>
                                
                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>
                              
                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                
                                <td>
                                
                                  
                                   

                                        <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-danger bg-danger bg-opacity-10 border border-success border-opacity-10 rounded-2">Rejected</small>

                                  
                                    
                                </td>
                                
                                <td>
                                    <x-icons.view href=""/>

                                </td>
                            </tr>
                            
                            <tr>
                                <td>3</td>
                                <td>AVNL041023240003</td>
                                
                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>
                              
                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                <td>
                                
                                   

                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Shortlisted</small>

                                    
                                </td>
                                
                                <td>
                                    <x-icons.view href=""/>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <nav class="p-0 ">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
        </div>
    </div>
</x-app-layout>