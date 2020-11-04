select p.maker from Product as p left join PC on p.model = PC.model
where p.type = 'Printer'
and where PC.ram = (select MIN(PC.ram) from PC)
and where PC.speed = (select MAX(PC.speed) from PC);