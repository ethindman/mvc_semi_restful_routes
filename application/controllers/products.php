<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$products = $this->product->retrieveAllProducts();
		$this->load->view('all_products', array('products' => $products));
	}

	public function showProduct()
	{
		$product = $this->product->retrieveOneProduct($this->input->post('id'));
		$this->load->view('show_products', array('product' => $product));
	}

	public function editProduct()
	{
		$product = $this->product->retrieveOneProduct($this->input->post('id'));
		$this->load->view('edit_products', array('product' => $product));
	}

	public function newProduct() 
	{
		$this->load->view('add_products');
	}

	public function createProduct() 
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "name", "trim|required");
		$this->form_validation->set_rules("description", "description", "trim|required");
		$this->form_validation->set_rules("price", "price", "trim|required");
		if($this->form_validation->run() === TRUE)
		{
			$postData = $this->input->post();
			$result = $this->product->createProduct($postData);
			if($result)
			{
				$this->session->set_flashdata('success', 'Product successfully created!');
				redirect('/');
			}
			else
			{
				$this->session->set_flashdata("error", "Something went wrong. The product wasn't added.");
				redirect('/');
			}
		}
		else
		{
			$this->session->set_flashdata("error", "Please fill out all required fields.");
			redirect('new');
		}
	}

	public function updateProduct()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "name", "trim|required");
		$this->form_validation->set_rules("description", "description", "trim|required");
		$this->form_validation->set_rules("price", "price", "trim|required");
		if($this->form_validation->run() === TRUE)
		{
			$postData = $this->input->post();
			$result = $this->product->updateProduct($postData);
			if($result)
			{
				$this->session->set_flashdata('success', 'Product successfully updated!');
				redirect('/');
			}
			else
			{
				$this->session->set_flashdata("error", "Something went wrong. The product wasn't updated.");
				redirect('/');
			}
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong. Please fill out all fields and try again.");
			redirect('/');
		}
	}

	public function destroyProduct()
	{
		$result = $this->product->destroyProduct($this->input->post('id'));
		if($result)
		{
			$this->session->set_flashdata('success', 'Product successfully deleted!');
			redirect('/');
		}
		else
		{
			$this->session->set_flashdata("error", "Something went wrong. The product wasn't deleted.");
			redirect('/');
		}
	}
}

//end of Products controller