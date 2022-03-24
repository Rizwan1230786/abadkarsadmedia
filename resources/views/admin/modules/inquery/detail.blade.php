 <!-- detail modal-body data -->
                <div class="row">
                    <div class="col-sm-3">
                        <p>Patient Name:</p>
                    </div>
                    <div class="col-sm-3">
                       <p style="color:green">{{$detail->firstname . ' ' .$detail->lastname}}</p>
                    </div>
                    <div class="col-sm-2">
                        <p>Email:</p>
                    </div>
                    <div class="col-sm-4">
                       <p style="color:green">{{$detail->email}}</p>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px;">
                        <p>Phone#</p>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px;">
                       <p style="color:green">{{$detail->phone}}</p>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px;">
                        <p>Age:</p>
                    </div>
                    <div class="col-sm-3" style="margin-top: 20px;">
                       <p style="color:green">{{$detail->age}}</p>
                    </div>
                    <?php
                    if(isset($detail->dry_cough) && $detail->dry_cough ==1){?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            <p>Dry-Cough:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                        @if($detail->dry_cough==1)
                        <p style="color:red">Yes</p>
                        @endif
                        </div>
                    <?php
                     }else{?>
                             <div class="col-sm-3" style="margin-top: 20px;">
                                <p>Dry-Cough:</p>
                            </div>
                            <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->dry_cough==0)
                            <p style="color:green">No</p>
                            @endif
                            </div>
                     <?php
                     }
                    ?>
                    <?php
                         if(isset($detail->cold) && $detail->cold ==1){?>
                            <div class="col-sm-3" style="margin-top: 20px;">
                                <p>Cold:</p>
                            </div>
                            <div class="col-sm-3" style="margin-top: 20px;">
                                @if($detail->cold==1)
                                  <p style="color:red">Yes</p>
                                @endif
                            </div>
                        <?php
                         }else{?>
                            <div class="col-sm-3" style="margin-top: 20px;">
                                <p>Cold:</p>
                            </div>
                            <div class="col-sm-3" style="margin-top: 20px;">
                                @if($detail->cold==0)
                                  <p style="color:green">No</p>
                                @endif
                            </div>
                        <?php
                         }
                    ?>
                    <?php
                    if($detail->sore_throat==1){?>
                       <div class="col-sm-3" style="margin-top: 20px;">
                            <p>Sore-Throat:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->sore_throat==1)
                             <p style="color:red">Yes</p>
                            @endif
                        </div>
                    <?php
                        }else{?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            <p>Sore-Throat:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->sore_throat==0)
                            <p style="color:green">No</p>
                            @endif
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                     if($detail->fever==1){?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                           <p>Fever:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->fever==1)
                              <p style="color:red">Yes</p>
                            @endif
                        </div>
                    <?php        
                        }else{?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            <p>Fever:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->fever==0)
                              <p style="color:green">No</p>
                            @endif
                        </div>
                    <?php
                     }
                    ?>
                    <?php
                     if($detail->headache ==1){?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                          <p>Headache:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->headache==1)
                              <p style="color:red">Yes</p>
                            @endif
                        </div>
                    <?php    
                     }else{?>
                         <div class="col-sm-3" style="margin-top: 20px;">
                          <p>Headache:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->headache==0)
                              <p style="color:green">No</p>
                            @endif
                        </div>
                     <?php   
                     }
                    ?>
                    <?php
                    if($detail->vomiting ==1){?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                          <p>Vomiting:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->vomiting==1)
                              <p style="color:red">Yes</p>
                            @endif
                        </div>
                    <?php    
                     }else{?>
                        <div class="col-sm-3" style="margin-top: 20px;">
                          <p>Vomiting:</p>
                        </div>
                        <div class="col-sm-3" style="margin-top: 20px;">
                            @if($detail->vomiting==0)
                              <p style="color:green">No</p>
                            @endif
                        </div>
                     <?php   
                     }
                    ?>
                    <div class="col-sm-12" style="margin-top: 20px;">
                        @if(isset($detail->dry_cough) && $detail->dry_cough ==1)
                        <p style="color:red; font-size:15px;">Its a covid inform the doctor</p>
                        @else
                        <p style="color:green; font-size:15px;">No any serious condition of patient</p>
                        @endif
                    </div>
                </div>
               
    <!-- end -->