<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-monitor icon-gradient bg-mean-fruit"> </i>
                    </div>
                    <div>PT. Blitzindo Utama
                        <nav class="page-title-subheading" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="active breadcrumb-item" aria-current="page">Data RPTKA</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Data RPTKA
						<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-link btn-actions-pane-right" style="color:white;">link
                        </button>
                        <form action="#">
                            <input class="btn-actions-pane-right mb-2 mr-2 btn btn-primary" type="submit" value="Tambah RPTKA" />
                        </form>
						<div class="dropleft d-inline-block">
                                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="btn mr-2 mb-2 btn-primary btn-actions-pane-right">Filter</button>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal2">
												By Date
												</button>
                                                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal3">
												By Expired Date
												</button>
                                            </div>
                        </div>

                    </div>
                    <div class="table-responsive" style="padding: 10px;">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="example">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
									<th class="text-center">Nomor RPTKA</th>
                                    <th class="text-center">Nama PT</th>
                                 	<th class="text-center">Jumlah RPTKA</th>
                                    <th class="text-center">RPTKA Terpakai</th>
                                    <th class="text-center">RPTKA Sisa</th>
                                    <th class="text-center">Keterangan</th>
									<th class="text-center">Aksi</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center text-muted">1</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="<?= base_url('detail'); ?>">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                               <tr>
                                    <td class="text-center text-muted">2</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">3</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">4</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">5</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">6</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">7</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">8</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">9</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">10</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">11</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">12</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">13</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">14</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">15</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">16</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">17</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">18</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">19</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">20</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
								<tr>
                                    <td class="text-center text-muted">21</td>
                                    <td class="text-center">440088KJL66</td>
                                    <td class="text-center">PT. Shanghai Shenhua</td>
                                    <td class="text-center">40</td>
                                    <td class="text-center">37</td>
                                    <td class="text-center">3</td>
									<td class="text-center">Perubahan RPTKA Dinamis</td>
                                    <td class="text-center">
                                        <form>
                                            <select class="form-control-sm form-control" onchange="location = this.value;">
                                                <option>Pilih ... </option>
                                                <option value="Data PT-Dashboard.html">Detail</option>
                                                <option>Tambah</option>
                                                <option>Hapus</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                          
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>





