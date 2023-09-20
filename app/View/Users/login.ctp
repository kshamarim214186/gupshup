
<div class="row">
<div class="col-sm-5  col-sm-offset-3">
<form class="form-signin" action="<?=ROOT_PATH?>users/login/" id="UserAdminLoginForm" method="post" accept-charset="utf-8">
<div class="row"><div class="col-sm-4"></div><div class="col-sm-8 white_clr"><h1>PLEASE SIGN IN</h1></div></div><br/>
<div class="row"><div class="col-sm-4"></div><div class="col-sm-8"><?php echo $this->Session->flash(); ?></div></div>

<div class="row"><div class="col-sm-4"><label>User Name</label></div><div class="col-sm-8"><input type="text" class="" placeholder="Username" name="data[User][name]" value="<? if(!empty($this->request->data['User']['name'])) { echo $this->request->data['User']['name'];}?>"></div></div><br/>

<div class="row"><div class="col-sm-4"><label>Password</label></div><div class="col-sm-8"><input type="password" class="" placeholder="Password" name="data[User][password]" id="UserPassword"  value="<? if(!empty($this->request->data['User']['password'])) { echo $this->request->data['User']['password'];}?>"></div></div><br/>

<div class="row"><div class="col-sm-4"></div><div class="col-sm-4 col-xs-6"><button class="btn btn-lg btn-success" type="submit">Sign in</button></div></div>
</form>
</div>
</div>