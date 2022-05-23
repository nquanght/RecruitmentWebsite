<?php
if (!empty($this->company)) {
    $dataComp = $this->company;
}
$arrLocation    = $this->listLocation;
$arrSize        = $this->listSize;
$arrField       = $this->listField;
$arrInfoCompany = [
    [
        'label'     => Form::labelRow('comp_name', 'Tên công ty', 4, true),
        'input'     => Form::inputRow('text', 'comp_name', 8, $dataComp['comp_name'], true, true)
    ],
    [
        'label'     => Form::labelRow('comp_tax_id', 'Mã số thuế', 4),
        'input'     => Form::inputRow('number', 'comp_tax_id', 8, $dataComp['comp_tax_id'], false, true)
    ],
    [
        'label'     => Form::labelRow('comp_size', 'Quy mô nhân sự', 4, true),
        'input'     => Form::selectBox('comp_size', $arrSize, 8, $dataComp['comp_size'], true)
    ],
    [
        'label'     => Form::labelRow('comp_location', 'Địa điểm', 4, true),
        'input'     => Form::selectBox('comp_location', $arrLocation, 8, $dataComp['comp_location'])
    ],
    [
        'label'     => Form::labelRow('comp_address', 'Địa chỉ', 4, true),
        'input'     => Form::inputRow('text', 'comp_address', 8, $dataComp['comp_address'], true)
    ],
    [
        'label'     => Form::labelRow('comp_field', 'Lĩnh vực hoạt động', 4, true),
        'input'     => Form::selectBox('comp_field', $arrField, 8, $dataComp['comp_field'])
    ],
    [
        'label'     => Form::labelRow('comp_description', 'Giới thiệu công ty', 4),
        'input'     => Form::textArea('comp_description', 8, $dataComp['comp_description'], 10)
    ],

];

$infoCompany    = Form::showForm($arrInfoCompany);
?>

<div class="row">
    <div class="col-12">
        <div class="mt-4">
            <div class="list-inline-item font-weight-bold"><a class="text-dark" href="<?= URL::addLink($this->arrParam['module'], $this->arrParam['controller'], 'account') ?>">Thông tin tài khoản</a></div>
            <div class="list-inline-item font-weight-bold border-bottom border-info"><a href="" class="text-info">Thông tin công ty</a></div>
        </div>
        <div class="card card-default my-3">
            <div class="card-header">
                <h3 class="card-title font-weight-bold">Thông tin công ty</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>

            <form class="form-horizontal" method="post" id="form-emp-company">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body p-0">
                                <?= $infoCompany ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="javascript:updateCompany('<?= URL::addLink($this->arrParam['module'], $this->arrParam['controller'], 'updateCompany') ?>')" id="updateCompany" name="update_Company" class="btn bg-gradient-info float-right">Cập nhật</a>
                </div>
            </form>
        </div>
    </div>
</div>