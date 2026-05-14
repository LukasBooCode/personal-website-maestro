CREATE TABLE blogs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    author TEXT,
    date_published TIMESTAMP,
    title TEXT,
    content TEXT
);

INSERT INTO blogs (author, date_published, title, content)
VALUES
    ('Lukas Schuurman', STRFTIME('%s', '2025-09-10 11:52:00'), 'Study Choice',
     'The things that motivate me to study ICT at HZ University of Applied Sciences, are the fact that
    I can concentrate for long periods of time on programming, learning, etc. simply because it
    feels good. ICT satisfies these needs. The reason I''m following the HZ course is because it''s
    less than 20 min. cycling from my house.'),
    ('Lukas Schuurman', STRFTIME('%s', '2025-09-10 12:01:00'), 'SWOT',
     'So, personal strengths and weaknesses analysis. Where do we begin? I''ve been told I''m indecisive.
    Sometimes I can''t control my distress, but I''m getting it under control. Personal strengths? On
    both my profile and the previous blogpost I said that I can be productive for long periods of
    time, so I suppose that applies here too. However, I don''t do well with interruptions. I
    seriously need independence, autonomy -- simply put, the freedom to get to the desired results
    *my* way.'),
    ('Lukas Schuurman', STRFTIME('%s', '2025-09-10 12:09:00'), 'Programming Experience',
     'Previous programming experience includes developing forward investment return apps in Python,
    essentially just calculating an average monthly return index based on FTSE All-World index or
    S&P500 Index by hand, as
    well as some C++. Before that, I did some Scratch in elementary school, although that is not
    really programming and more of a tool to teach children what programming is on a very abstract
    level, displaying the rhizomatic links between variables, formulas, functions, etc. visually.'),
    ('Lukas Schuurman', STRFTIME('%s', '2025-09-10 12:14:00'), 'First Feedback',
     'I have lost access to the SKC-document. What I can remember is that the lady said that there was
    a Facility Card for people like me. I believe I had mentioned I had some sleep apnea issues?
    I''ve already got that under control now through therapy, Modafinil and Ritalin. Furthermore, she
    wished me good luck with my study.'),
    ('Lukas Schuurman', STRFTIME('%s', '2025-09-10 12:23:00'), 'ICT as a field',
     'ICT is a field that emerged in parallel to the emergence of computers. Where there were
    computers, there was information and communication technology. As the world becomes more
    complex, nuanced and intricate, it requires efficient and elegant solutions to problems that
    arise from that complexity. That''s were we, the ICT''ers come in. We learn continuously, adapting
    ourselves faster to emerging issues than the turning of the Earth. Only then are we at our best.');