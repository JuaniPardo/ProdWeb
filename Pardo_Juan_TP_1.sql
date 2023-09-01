-- 1. Elaborar una sentencia SQL que muestre los empleados que hayan ingresado durante
-- los años 2008 y 2009.
SELECT *
FROM EMPLOYEES
WHERE TO_NUMBER(TO_CHAR(HIRE_DATE, 'YYYY')) >= 2008
  AND TO_NUMBER(TO_CHAR(HIRE_DATE, 'YYYY')) <= 2009;

-- 2. Elaborar una sentencia SQL que muestre los empleados que perciban un salario entre
-- 7500 y 9500. Ordenar el resultado por monto salarial (de mayor a menor).
SELECT *
FROM EMPLOYEES
WHERE SALARY >= 7500
  AND SALARY <= 9500
ORDER BY SALARY DESC;

-- 3. Elaborar una sentencia SQL que muestre los empleados que hayan sido contratados
-- antes de 2006 y que también perciban un salario menor o igual a 3200.
SELECT *
FROM EMPLOYEES
WHERE TO_NUMBER(TO_CHAR(HIRE_DATE, 'YYYY')) <= 2006
  AND SALARY <= 3200;

-- 4. Elaborar una sentencia SQL que muestre toda la información almacenada en la tabla
-- EMPLOYEES de aquellos empleados que pertenezcan al departamento de Marketing.
-- Incluir también los empleados que hayan sido contratados en el primer trimestre del
-- año 2004 y cuya función (job) sea “Sales Representative” (pertenezcan o no al
-- departamento de Marketing). Ordenar el resultado por monto de salario de menor a mayor.
SELECT *
FROM EMPLOYEES
         INNER JOIN DEPARTMENTS ON DEPARTMENTS.DEPARTMENT_ID = EMPLOYEES.DEPARTMENT_ID
         INNER JOIN JOBS ON JOBS.JOB_ID = EMPLOYEES.JOB_ID
WHERE DEPARTMENT_NAME LIKE 'Marketing'
   OR (TO_NUMBER(TO_CHAR(HIRE_DATE, 'Q')) = 1
    AND TO_NUMBER(TO_CHAR(HIRE_DATE, 'YYYY')) = 2004
    AND JOB_TITLE LIKE 'Sales Representative')
ORDER BY SALARY ASC;

-- 5. Elaborar una sentencia SQL que muestre el nombre de todos los departamentos que
-- tengan algún manager asignado. Mostrar el nombre del departamento en
-- mayúsculas. Ordenar el resultado alfabéticamente en forma ascendente.
SELECT DEPARTMENT_NAME
FROM DEPARTMENTS
WHERE MANAGER_ID IS NOT NULL
ORDER BY DEPARTMENT_NAME ASC;

-- 6. Elaborar una sentencia SQL que muestre DIRECCION, CODIGO POSTAL y CIUDAD de
-- todas las oficinas (LOCATIONS) ubicadas en Estados Unidos, Canadá y México.
-- Ordenar el resultado por nombre de ciudad.
SELECT STREET_ADDRESS AS DIRECCION, POSTAL_CODE AS "CODIGO POSTAL", CITY AS CIUDAD
FROM LOCATIONS
         INNER JOIN COUNTRIES ON LOCATIONS.COUNTRY_ID = COUNTRIES.COUNTRY_ID
WHERE COUNTRY_NAME LIKE 'United States of America'
   OR COUNTRY_NAME LIKE 'Canada'
   OR COUNTRY_NAME LIKE 'Mexico'
ORDER BY CITY;

-- 7. Elaborar una sentencia SQL que muestre el nombre de los países que pertenecen a Asia.
SELECT COUNTRY_NAME
FROM COUNTRIES
         INNER JOIN REGIONS ON COUNTRIES.REGION_ID = REGIONS.REGION_ID
WHERE REGION_NAME LIKE 'Asia'
;

-- 8. Elaborar una sentencia SQL que les permita darse de alta como nuevo/a empleado/a
-- de la compañía utilizando su nombre y apellido y un valor de EMPLOYEE_ID mayor a
-- 800. La fecha de contratación (HIRE_DATE) debe ser 01/08/2023, la función (JOB)
-- debe ser “Programmer” y el departamento asignado debe ser “IT Support”.
INSERT INTO EMPLOYEES (EMPLOYEE_ID, FIRST_NAME, LAST_NAME, HIRE_DATE, JOB_ID, DEPARTMENT_ID, EMAIL)
VALUES (801,
        'Juan',
        'Pardo',
        TO_DATE('2023-08-01', 'YYYY-MM-DD'),
        'Programmer', (SELECT DEPARTMENT_ID FROM DEPARTMENTS WHERE DEPARTMENT_NAME = 'IT Support'),
        'juan.pardo@davinci.edu.ar');

-- 9. Elaborar una sentencia SQL que permita actualizar el manager del departamento “IT
-- Support” (tabla DEPARTMENTS). La nueva manager será Nancy Greenberg
-- (EMPLOYEE N° 108).
UPDATE DEPARTMENTS
SET MANAGER_ID = 108
WHERE DEPARTMENT_NAME = 'IT Support';

-- 10. Elaborar una sentencia SQL que permita actualizar el empleado creado en el punto 8
-- asignándole el manager del punto 9.
UPDATE EMPLOYEES
SET MANAGER_ID = 108
WHERE EMPLOYEE_ID = 801;
