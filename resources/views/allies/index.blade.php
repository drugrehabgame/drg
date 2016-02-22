@extends('...layouts.master') @section('title', 'Allies') @section('content')


  <div class="allies">
 <div class="row">
<?php foreach ($allies as $ally):?>

       <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2">
                <img src="http://lorempixel.com/80/80/" />
              </div>
              <div class="col-md-4">
                <h4><b><?php echo $ally['character_name'];?></b></h4>
                <h5>Social Worker</h5></div>
              <div class="col-md-6">
                <form class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" id="messageToAlly" placeholder="Send a message..."> <button type="submit" class="btn btn-default">Send</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5>Text from Ally. Rslk fsdkl mflsd mfoidmmfklsd mflsdm flsdm ofimsdfmsd.fm s.mfisdnflsndfsa.nf.ks nf/lsnadi lfnsd/lia f fsdfsdf sd ns/fn/slfn s<p class="pull-right"><small>Mon 22-Feb-2016 @ 11:40a.m.</small></p></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h5>Hey this is Ally again... update your journal... keeps me occupied.<p class="pull-right"><small>Mon 22-Feb-2016 @ 11:40a.m.</small></p></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <?php endforeach;?>
      
 <!-- </div> row div -->
 <!--   <div class="row">-->
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2">
                <img src="http://lorempixel.com/80/80/" />
              </div>
              <div class="col-md-4">
                <h4><b>Peter Benali</b></h4>
                <h5>Pastor</h5></div>
              <div class="col-md-6">
                <form class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" id="messageToAlly" placeholder="Send a message..."><button type="submit" class="btn btn-default">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
        <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-2">
                <img src="http://lorempixel.com/80/80/" />
              </div>
              <div class="col-md-4">
                <h4><b>Icarus Olanga</b></h4>
                <h5>Oracle</h5></div>
              <div class="col-md-6">
                <form class="form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" id="messageToAlly" placeholder="Send a message..."> <button type="submit" class="btn btn-default">Send</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  </div> 

  </div>


@stop