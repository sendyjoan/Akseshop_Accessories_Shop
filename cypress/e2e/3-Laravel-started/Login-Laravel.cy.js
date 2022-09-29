const { Input } = require("postcss");

describe('Test Barang', () => {
  it('Open Barang Page', () => {
    cy.visit('http://127.0.0.1:8000/dashboard/products');
    cy.get('.content > :nth-child(2) > .bg-secondary > .d-flex > .mb-0').contains('Daftar Barang');
    cy.get('.bg-secondary > .d-flex > .btn').contains('Tambah Barang');
    cy.get('.content > :nth-child(2) > .bg-secondary').contains('Nama Barang');
    cy.get('.content > :nth-child(2) > .bg-secondary').contains('Stock');
    cy.get('.content > :nth-child(2) > .bg-secondary').contains('Harga');
    cy.get('.content > :nth-child(2) > .bg-secondary').contains('Action');
    cy.get('tbody > tr > :nth-child(4)').contains('Detail');
    cy.get('tbody > tr > :nth-child(4)').contains('Update');
    cy.get('tbody > tr > :nth-child(4)').contains('Add Stock');
    cy.get('tbody > tr > :nth-child(4)').contains('Delete');
  })
  
  it('Create Product', () => {
    cy.get('.bg-secondary > .d-flex > .btn').click({force: true});
    cy.get('.col-sm-12 > .bg-secondary').contains('Tambah Barang');

    cy.get(':nth-child(2) > #floatingInput').type('Merdeka Belajar');
    cy.get(':nth-child(3) > #floatingInput').type('Merdeka Belajar merupakan program pemerintah');
    cy.get('#floatingNumber').type(4);
    cy.get('.form-select').select('Kalung');
    cy.get('#floatingPrice').type(5000);
    cy.get('#formFile').selectFile('user.jpg');
    cy.get('form > .btn').click();
    
    cy.get('.swal2-confirm').click();
  })

  it('Read Product Data', () => {
    cy.get(':nth-child(2) > :nth-child(4) > .btn-info').click({force: true});
    cy.get('.bg-secondary > .container').contains('Merdeka Belajar');
    cy.get('.bg-secondary > .container').contains('Merdeka Belajar merupakan program pemerintah');
    cy.get('.bg-secondary > .container').contains('Kalung');
    cy.get('.bg-secondary > .container').contains(4);
    cy.get('.bg-secondary > .container').contains(5000);
    cy.get('.table-responsive > .btn').click();
  })

  it('Edit Product Data', () => {
    cy.get('[href="http://127.0.0.1:8000/dashboard/products/7/edit"]').click();
    cy.get('#floatingInput').type(' I');
    cy.get(':nth-child(5) > #floatingNumber').type(' I');
    cy.get(':nth-child(6) > #floatingNumber').type(' I');
    cy.get('.form-select').select('Kalung');
    cy.get('#floatingPrice').type(0);
    cy.get('#formFile').selectFile('user.jpg');
    cy.get('button.btn').click();
    cy.get('.swal2-confirm').click();
  })

  it('Delete Product', () => {
    cy.visit('http://127.0.0.1:8000/dashboard/products');
    cy.get(':nth-child(2) > :nth-child(4) > form').submit();
    cy.get('.swal2-confirm').click();
  })
})