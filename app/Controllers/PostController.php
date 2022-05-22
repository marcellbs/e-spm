<?php

namespace App\Controllers;

use App\Models\Post;
use CodeIgniter\RESTful\ResourceController;

class PostController extends ResourceController
{
    private $post;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->session = \Config\Services::session();
        $this->post = new Post;     
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {   
        $currentPage = $this->request->getVar('page_post') ? $this->request->getVar('page_post') : 1;
        // $posts = $this->post->orderBy('id', 'desc')->findAll();
        
        $data = [
            'title' => 'Postingan',
            'posts' => $this->post->paginate(5, 'post'),
            'pager' => $this->post->pager,
            'currentPage' => $currentPage,
        ];
        return view('posts/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $post = $this->post->find($id);
        $data = [
            'title' => 'Detail Postingan',
            'post' => $post,
        ];
        if($post) {
            return view('posts/show', $data);
        }
        else {
            return redirect()->to('/posts');
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data = [
            'title' => 'Tambah Postingan',
        ];
        return view('posts/create', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $inputs = $this->validate([
            'title' => 'required|min_length[5]',
            'description' => 'required|min_length[5]',
        ]);
        $data = [
            'title' => 'Tambah Postingan',
            'validation' => $this->validator
        ];

        if (!$inputs) {
            return view('posts/create',$data);
        }
        
        $this->post->save([
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description')
        ]);
        session()->setFlashdata('success', 'Berhasil membuat postingan.');
        return redirect()->to(site_url('/posts' ));
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $post = $this->post->find($id);

        $data = [
            'title' => 'Edit Postingan',
            'post' => $post,
        ];

        if($post) {
            return view('posts/edit', $data);
        }
        else {
            session()->setFlashdata('failed', 'Postingan tidak ditemukan.');
            return redirect()->to('/posts');
        }
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $inputs = $this->validate([
            'title' => 'required|min_length[5]',
            'description' => 'required|min_length[5]',
        ]);

        if (!$inputs) {
            return view('posts/create', [
                'validation' => $this->validator
            ]);
        }

        $this->post->save([
            'id' => $id,
            'title' => $this->request->getVar('title'),
            'description'  => $this->request->getVar('description')
        ]);
        session()->setFlashdata('success', 'Postingan berhasil diubah.');
        return redirect()->to(base_url('/posts'));
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->post->delete($id);
        session()->setFlashdata('success', 'Berhasil mengahapus postingan.');
        return redirect()->to(base_url('/posts'));
    }
}