<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function createProduct($postData)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$result = $this->db->query( $query, array($postData['name'], $postData['description'], $postData['price']) );
		return $result;
	}

	public function retrieveAllProducts()
	{
		$query = "SELECT * FROM products ORDER BY created_at DESC";
		$products = $this->db->query( $query )->result_array();
		return $products;
	}

	public function retrieveOneProduct($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$product = $this->db->query( $query, array($id) )->row_array();
		return $product;
	}

	public function destroyProduct($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$result = $this->db->query( $query, array($id) );
		return $result;
	}

	public function updateProduct($postData)
	{
		$query = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = NOW() WHERE id = ?";
		$result = $this->db->query( $query, array($postData['name'], $postData['description'], $postData['price'], $postData['id']) );
		return $result;
	}

}

//end of Product controller