select p.maker, p.type from "Product" as p
where p.maker in
(select p.maker from "Product" as p
group by p.maker
having count(distinct p.type) = 1 and count(p.model) > 1)
group by p.maker, p.type