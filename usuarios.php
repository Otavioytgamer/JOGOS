<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestão de Usuários</title>
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512..." crossorigin="anonymous" referrerpolicy="no-referrer" />


  <style>

    tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    tbody tr:hover {
      background-color: #f1f7ff; 
    }

  
    .table-responsive {
      background-color: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      border-radius: 8px;
      overflow: hidden;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }


    th {
      background-color: #2c3e50; 
      color: #ffffff;
      padding: 15px;
      text-align: left;
      font-size: 13px;
      text-transform: uppercase;
    }

   
    td {
      padding: 15px;
      border-bottom: 1px solid #eee;
      font-size: 14px;
      color: #444;
    }

  
    .btn-icon {
      background: none;
      border: none;
      color: #004a8d;
      cursor: pointer;
      font-size: 16px;
    }

    .btn-icon:hover {
      color: #0066cc;
    }

   
    .badge {
      padding: 6px 12px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: 500;
    }

    .badge.ativo {
      background-color: #d4edda;
      color: #155724;
    }

    .badge.inativo {
      background-color: #f8d7da;
      color: #721c24;
    }

    
    .header-content {
      margin-bottom: 24px;
    }

    h2 {
      margin: 0 0 8px 0;
      color: #2c3e50;
    }

    p {
      margin: 0;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="header-content">
    <h2>Gestão de Usuários</h2>
    <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
  </div>

  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Acesso</th>
          <th>Status</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td>Eric Freitas</td>
          <td>eric@unifiev.edu.br</td>
          <td>Administrador</td>
          <td><span class="badge ativo">Ativo</span></td>
          <td>
            <button class="btn-icon" title="Editar">
              <i class="fa-solid fa-pen"></i>
            </button>
          </td>
        </tr>

        <tr>
          <td>02</td>
          <td>Ana Souza</td>
          <td>ana.souza@email.com</td>
          <td>Editor</td>
          <td><span class="badge ativo">Ativo</span></td>
          <td>
            <button class="btn-icon" title="Editar">
              <i class="fa-solid fa-pen"></i>
            </button>
          </td>
        </tr>

        <tr>
          <td>03</td>
          <td>Carlos Lima</td>
          <td>carlos.lima@servidor.com</td>
          <td>Usuário</td>
          <td><span class="badge inativo">Inativo</span></td>
          <td>
            <button class="btn-icon" title="Editar">
              <i class="fa-solid fa-pen"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</body>
</html>