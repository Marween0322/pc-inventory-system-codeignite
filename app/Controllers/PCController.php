<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PCModel;

class PCController extends BaseController
{
    public function pcList()
    {
        $pcModel = new PCModel();
        $data['pcs'] = $pcModel->findAll();

        return view('pcs/list', $data);
    }

    public function pcStore()
    {
        $mdlPC = new PCModel(); // Change the model name

        $dataPost = [
            'brand' => $this->request->getPost('txtBrand'),
            'model' => $this->request->getPost('txtModel'),
            'year' => $this->request->getPost('txtYear'),
            'processor' => $this->request->getPost('txtProcessor'),
            'memory' => $this->request->getPost('txtMemory'),
            'storage' => $this->request->getPost('txtStorage'),
            'graphics_card' => $this->request->getPost('txtGraphicsCard'),
            // Add other fields as needed
        ];

        $mdlPC->insert($dataPost);
        return redirect()->to('pcs/list')->with('success', 'PC Successfully Added.');
    }

    public function pcCreate()
{
    return view('pcs/add');
}
public function show($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/show', $data);
    }

    public function pcView($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/edit', $data);
    }

    public function pcEdit($id)
    {
    $pcModel = new PCModel();
    $data['pc'] = $pcModel->find($id);

    return view('pcs/edit', $data);
    }

    public function pcUpdate($id)
    {
        $pcModel = new PCModel();
        $dataPost = [
            'brand' => $this->request->getPost('txtBrand'),
            'model' => $this->request->getPost('txtModel'),
            'year' => $this->request->getPost('txtYear'),
            'processor' => $this->request->getPost('txtProcessor'),
            'memory' => $this->request->getPost('txtMemory'),
            'storage' => $this->request->getPost('txtStorage'),
            'graphics_card' => $this->request->getPost('txtGraphicsCard'),
        ];
        $pcModel->update($id, $dataPost);
        
        return redirect()->to('pcs/list')->with('success-update', 'PC Successfully Updated.');
    }

    public function pcViewDelete($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/view', $data);
    }

    public function pcDelete($id)
    {
        $pcModel = new PCModel();
        $pcModel->delete($id);

        return redirect()->to('pcs/list')->with('success-delete', 'PC Successfully Deleted.');
    }
}